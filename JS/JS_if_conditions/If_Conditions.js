/* 1. Write a JavaScript program that accept two integers and
 * display the larger.Go to the editor */
/******* Start Your Code *********/
function Larger(num1, num2) {
  if (num1 > num2) {
    return num1;
  } else {
    return num2;
  }
}
/******* End Your Code ********* */

/* 2. Write a JavaScript conditional statement to find the sign
 of product of three numbers. Display an alert box with the 
 specified sign. Go to the editor 
Sample numbers : 3, -7, 2 
Output : The sign is - */
/******* Start Your Code *********/
function sign(num1, num2, num3) {
  if (num1 + num2 + num3 >= 0) {
    alert("The sign is +");
  } else {
    alert("The sign is -");
  }
}
/******* End Your Code ********* */

/* 3. Write a JavaScript conditional statement to sort three numbers. Display an alert box to show the result. Go to the editor 
Sample numbers : 0, -1, 4 
Output : 4, 0, -1 */
/******* Start Your Code *********/
function sort(num1, num2, num3) {
  if (num1 > num2 && num1 > num3) {
    if (num2 > num3) {
      console.log(num1 + ", " + num2 + ", " + num3);
    } else {
      console.log(num1 + ", " + num3 + ", " + num2);
    }
  } else if (num2 > num1 && num2 > num3) {
    if (num1 > num3) {
      console.log(num2 + ", " + num1 + ", " + num3);
    } else {
      console.log(num2 + ", " + num3 + ", " + num1);
    }
  } else if (num3 > num1 && num3 > num2) {
    if (num1 > num2) {
      console.log(num3 + ", " + num1 + ", " + num2);
    } else {
      console.log(num3 + ", " + num2 + ", " + num1);
    }
  }
}
/******* End Your Code ********* */

/*4. Write a JavaScript conditional statement to find the largest of five numbers. 
Display an alert box to show the result. Go to the editor 
Sample numbers : -5, -2, -6, 0, -1 
Output : 0 */

/******* Start Your Code *********/
function largest(num1, num2, num3, num4, num5) {
  if (num1 > num2 && num1 > num3 && num1 > num4 && num1 > num5) {
    console.log(num1);
  } else if (num2 > num1 && num2 > num3 && num2 > num4 && num2 > num5) {
    console.log(num2);
  } else if (num3 > num1 && num3 > num2 && num3 > num4 && num3 > num5) {
    console.log(num3);
  } else if (num4 > num1 && num4 > num3 && num4 > num2 && num4 > num5) {
    console.log(num4);
  } else {
    console.log(num5);
  }
}
/******* End Your Code ********* */

/* 5.Write the if statement to display "Hello World" if x is greater than y, otherwise alert "Goodbye".*/
/******* Start Your Code *********/
function displayer(x, y) {
  if (x > y) {
    return "Hello World!";
  } else {
    return "Goodbye";
  }
}
/******* End Your Code ********* */
