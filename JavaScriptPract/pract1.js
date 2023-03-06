document.write("I love javascript");
console.log('JS Testing');

//one line comment
/*  
    multiple
    line
    comment
*/

//variables
var num1 = 4;       //integer
var num2 = 1.5;     //float
var num3;           //undefined variable
var num4 = -3;      //negative int
var st1 = "John";   //string

document.write(num1);           //prints the variable 
document.write(num1 + num2);    //ads the variable and prints it
document.write(num3);           //will print "undefined
document.write("I am" + st1);   //will concatinate string variables

//arrays
var stud1 = ["Panzo, Cogo, Papas"];         //array
var stud2 = new Array("Sala, Sam, Bea");    //array constructor

document.write(stud1);
document.write(stud2);

//functions
function f1(){          //function
    alert("Wake up!!");
}