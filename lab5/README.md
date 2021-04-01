# Question 1: Alter visibility of an image in HTML document using Js

We can alter visibility of an image in HTML document by using CSS property, either by visibility: or by display: .

### CSS Visibility

The visibility property specifies whether or not an element is visible. It has couple of values that we can use.

visible: The element is visible.
hidden: The element is hidden (but still takes up space).

### CSS Display

The display property specifies the display behavior (the type of rendering box) of an element. It also has couply of values.

none: The element is completely removed.
block: Displays an element as a block element (like "<p>" tag). It starts on a new line, and takes up the whole width.

# Question 2: Illustrate element positioning and Stacking using Js

For element positioning we have CSS position property.
The position property specifies the type of positioning method used for an element.
We have couple of position values:
1. static
2. relative
3. fixed

1. Static
HTML elements are positioned static by default.
Static positioned elements are not affected by the top, bottom, left, and right properties.

2. Relative
An element with position: relative; is positioned relative to its normal position.
Setting the top, right, bottom, and left properties of a relatively-positioned element will cause it to be adjusted away from its normal position. Other content will not be adjusted to fit into any gap left by the element.

For stacking images we have CSS z-Index property.
The z-index property specifies the stack order of an element.
An element with greater stack order is always in front of an element with a lower stack order.
```
z-index: 0 or 1;
```

# Question 3: Illustrate dynamic content and change colors using Js

By DOM Manipulation using JS this can be achieved.


# Question 4: Illustrate drag and drop element using Js

For implementing drag and drop using js we will have to use events (mousedown and mouseup in this case).
This can be achieved by using addEventListener from js.

```
element.addEventListener(type, listener [, options]);
```

When we register a Mouse Event we will be provided with clientX and clientY property.

### NOTE: clientX property returns the horizontal coordinate (according to the client area) of the mouse pointer when a mouse event was triggered and clientY returns the vertical coordinate.

# Question 5: Illustrate from validation form using Js

DOM manipulation can be used to solve this too.




