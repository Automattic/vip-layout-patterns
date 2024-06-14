#!/bin/sh

cleanup() {
    echo "Caught SIGINT signal. Shutting down..."
    kill $WP_NOW_PID
    exit 0
}

# Trap SIGINT (Ctrl+C) and SIGTERM signals to run the cleanup function
trap 'cleanup' SIGINT SIGTERM

# Run wp-now in the background
wp-now start --blueprint='.wp-playground/wp-playground.json' --skip-browser &
WP_NOW_PID=$!

# Run wp-scripts start in the foreground
wp-scripts start 
