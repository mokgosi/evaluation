# evaluation
evaluation test

This project assumes you know how to use both git and composer and you have them installed on your local machine.

#TOOLS USED IN THIS PROJECT
Symfony 2.8.*
PHP 5.6.*
Git 2.7
Composer

#INSTALLATION

open console or command prompt and run the following commands

#clone the repository to your local
$ git clone https://github.com/mokgosi/evaluation.git

#Check in to your project root and download symfony libraries
$ cd evaluation
$ composer update

Assuming you are running the app from PHPs built in server:

navigate to http://localhost:8000/api/doc on the brower to view the API from a sandbox

navigate to http://localhost:8000 to consume api from frontend


=======================================================================================================================

2) Considering this code http://pastebin.com/kWQTvFe8

<?php
 
$w = [1,2,3,4,5,6,7,8];$x=0;
foreach($w as $w1)
$x=$w1;+$x;

- What is the value of $w1 at the end of the execution?
  
  	8

- What do you consider to be wrong with the code?

  	code is not properly formatted
  	code is not readable
  	The statement +$x; won't make any difference - maybe it was meant to be ++$x;  
    		
- How can it be made more readable?

	write each statement in a separate line
	add braces to foreach statement
   
- Rewrite the code to process $w so that $x will have the same value but the code is much more efficient

	<?php

	//get rid of a statement to avoid unneccesary execution of +$x;

	$w = [1, 2, 3, 4, 5, 6, 7, 8];

        $x = 0;

        foreach ($w as $w1) { 
            $x = $w1; 
        }


3) Which of the following versions of code you feel to be the best approach and why?

    	a) class Crawler extends http_request {}

    	b) class Crawler {
           	public function __construct(http_request $transport) {
           	}
       	}   

	Answer: (a) because: Dependency Inversion Principle states that high level module should not depend on the low level module, 
                both should depend on abstractions.
	 

4) Considering this code http://pastebin.com/amiH1ZvG:
   How would you style it so that both divs will have a red background and a 3 pixel black border and the last one will have a right border blue?

        .foo {
             background-color: red;
             border: 3px solid black;
        }
            
        .bar {
             border-right-color: blue;
        }

5) Explain the implications of a SELECT * query and why is it good or bad

	Good:
	
	- It's easy and quick to write
	- It get you all the columns when you need them all
  	- Its OK when you're typing and executing queries by hand[using mysqladmin for example], not when you're writing queries for code.

	Bad bacause:

	- The fact that it's easy and quick to write is root of all evil and laziness
	- You load more information than what you only need.
	- doesn't capture db changes and usually you load a lot of data which you don't need
    	- even if u need all the columns in the table, u might think using '*' is better cause its short, 
          but in the future someone might add additional columns to your table, 
          which are not needed in your older query, but since u used '*' all these new columns will be loaded anyway.
	- as you don't know what you select, you don't know the result (e.g. can I do $fetchedResult->name, nobody knows if * included a column called "name")
	- In larger tables this may cause performance and network load issues
	- In some cases if columns order, your code is bound to break during binding
	- If column names change, your code is bound to break.
	- Schema changes to active tables happens all the time
	- intefers with the intent you want to use data for
	- If columns are deleted, your code is bound to break.

	Conlusion:
	
	not a good idea unless you know what you are doing.

 


	
		
	




