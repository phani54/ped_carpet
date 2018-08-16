# simple-toast-message
A simple toast message using JQuery to show alert with colors.

Simple to include and use.

#steps
1. Copy the simpleToastMessage.css file to css directory and link it in page.
<link href="css/simpleToastMessage.css" rel="stylesheet" type="text/css"/>

2. Copy the simpleToastMessage.js file to js directory and include it in page (After importing JQuery file).
<script src="js/simpleToastMessage.js" type="text/javascript"></script>

# Showing with manual close

## For showing default toast message 
defaultToast("text to be show");

## For showing success toast message
successToast("text to be show");

## For showing error toast message
errorToast("text to be show");

# Showing with automatic close

## For showing default automatic toast message
defaultToastAuto("text to be show");

## For showing success automatic toast message
successToastAuto("text to be show");

## For showing error automatic toast message
errorToastAuto("text to be show");
