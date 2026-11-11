const PIXELS_PER_LINE = 16;
const ROUTE_WHEEL_LOCK_KEY = 'full-page-navigation-wheel-lock';

const normaliseWheelDelta = (event: WheelEvent, preferHorizontal = false) => {
  const rawDelta = preferHorizontal && Math.abs(event.deltaX) > Math.abs(event.deltaY)
    ? event.deltaX
    : event.deltaY;

  if (event.deltaMode === WheelEvent.DOM_DELTA_LINE) return rawDelta * PIXELS_PER_LINE;
  if (event.deltaMode === WheelEvent.DOM_DELTA_PAGE) return rawDelta * window.innerHeight;
  return rawDelta;
};

/**
 * Turns noisy wheel input into deliberate full-page steps.
 *
 * Pixel-based wheels and trackpads are accumulated to a deliberate threshold.
 * Repeated movement in the last accepted direction is ignored for a fixed
 * period, while reversing direction remains immediately available.
 */
export const createWheelStepDetector = ({
  threshold = 80,
  accumulationIdleMs = 140,
  sameDirectionCooldownMs = 750,
} = {}) => {
  let accumulatedDelta = 0;
  let accumulationDirection = 0;
  let accumulationResetTimer = 0;
  let lastStepDirection = 0;
  let lastStepAt = Number.NEGATIVE_INFINITY;

  return (event: WheelEvent, preferHorizontal = false) => {
    const delta = normaliseWheelDelta(event, preferHorizontal);
    const direction = Math.sign(delta);
    if (!direction) return 0;

    window.clearTimeout(accumulationResetTimer);
    accumulationResetTimer = window.setTimeout(() => {
      accumulatedDelta = 0;
      accumulationDirection = 0;
    }, accumulationIdleMs);

    if (direction !== accumulationDirection) {
      accumulatedDelta = 0;
      accumulationDirection = direction;
    }

    accumulatedDelta += delta;
    const requiredDelta = event.deltaMode === WheelEvent.DOM_DELTA_PIXEL ? threshold : 1;
    if (Math.abs(accumulatedDelta) < requiredDelta) return 0;

    accumulatedDelta = 0;
    const now = performance.now();
    if (direction === lastStepDirection && now - lastStepAt < sameDirectionCooldownMs) return 0;

    lastStepDirection = direction;
    lastStepAt = now;
    return direction;
  };
};

export const lockWheelRouteNavigation = (direction: number, durationMs = 750) => {
  if (!direction) return;

  try {
    window.sessionStorage.setItem(ROUTE_WHEEL_LOCK_KEY, JSON.stringify({
      direction: Math.sign(direction),
      until: Date.now() + durationMs,
    }));
  } catch {
    // Navigation still works when session storage is unavailable.
  }
};

export const wheelRouteNavigationIsLocked = (direction: number) => {
  if (!direction) return false;

  try {
    const storedLock = window.sessionStorage.getItem(ROUTE_WHEEL_LOCK_KEY);
    if (!storedLock) return false;

    const lock = JSON.parse(storedLock) as { direction?: number; until?: number };
    if (!lock.until || lock.until <= Date.now()) {
      window.sessionStorage.removeItem(ROUTE_WHEEL_LOCK_KEY);
      return false;
    }

    return lock.direction === Math.sign(direction);
  } catch {
    return false;
  }
};
