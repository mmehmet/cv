#!/bin/bash

set -e

npm run build

scp -r ./dist/* mic@computerwiz.info:/home/mic/cv/dist/

