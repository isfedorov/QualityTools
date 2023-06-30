.PHONY: prepare build dist

# Default target is 'dist'
.DEFAULT_GOAL := dist

prepare:
	@echo "Making directory ./build"
	@mkdir -p ./build

build: prepare
	@echo "Copying files to build directory..."
	@echo "Copying ./src/SimpleCalculator.php to ./build directory..."
	@cp src/SimpleCalculator.php src/Functions/SimpleCalculator.php

dist: build
	@echo "Creating archive..."
	@tar -czf ./build/build.tar.gz -C ./build *
	@echo "Files copied and compressed in build directory OK!"
