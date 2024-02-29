# glitchtml

A ***no-javascript*** text scrambling effect for web design.

Created as a proof-of-concept personal challenge.

Written entirely in php, css, and html.


## The Concept
 - A source text is added to the config file
 - A library of letters and special characters is used to create a random string of characters of the length of the source
 - A loop creates subsequent strings, fixing one character each pass
 - A separate boolean array, initialized all-false and of the same length as the source switches false to true as a position is corrected
 - The output strings are passed to the html as <p> elements
 - A separate php file creates css, utilizing the length of the source and other adjustable parameters
 - The <p> elements are animated upward via container translation within a parent container with overflow turned off
 - The length of the source (number of output strings), the size of the translating container and the number of steps in the animation are synchronized
 - This synchronization, the hidden overflow, and the step number of the animation allow for the appearance of scrambling text in place

## **This is a work in progress**

## ***Thank you for viewing***


