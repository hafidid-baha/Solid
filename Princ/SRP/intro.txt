srp state that the class should have anly one responsibility
or 
class should only have one reason to change

to demonstrate this we need to solve the next exercice

create personne class with the next 
+ fields
    + first name
    + last name
    + email
    + password
+ methods
    + __construct
    + createUsername
    + validateEmail
    + property getters
    + property setters

in this sutuation we have createUsername() function that could be if you we need to change 
the way of createing usernames.
validateEmail() also could be change if we need to change the way we validate our personne
email

-> so we have to create a new validator class to validate the personne email instead of 
putung the two functions in the same personne class
