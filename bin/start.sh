#!/bin/sh

# Function to kill background processes when exiting
cleanup() {
    echo "Caught SIGINT signal. Shutting down..."
    # Kill the background process
    kill $WP_NOW_PID
    # You may also want to kill the wp-scripts process here, if necessary
    # kill $WP_SCRIPTS_PID
    exit 0
}

# Trap SIGINT (Ctrl+C) and SIGTERM signals to run the cleanup function
trap 'cleanup' SIGINT SIGTERM

# Run wp-now start in the background
wp-now start --blueprint='.wp-playground/wp-playground.json' --skip-browser &
WP_NOW_PID=$!

# Wait a bit for wp-now to initialize before starting the next command
sleep 2

# Run wp-scripts start in the foreground
wp-scripts start 
WP_SCRIPTS_PID=$!

# Wait for wp-scripts process to finish
wait $WP_SCRIPTS_PID
