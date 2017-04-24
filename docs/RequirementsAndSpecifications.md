# Team Specifications and Requirements

## MEMBER<br>
(underlined) We need to keep track of a Member’s unique bannerID<br>
We need to keep track of a Member’s name.<br>
We need to keep track of a Member’s email.<br>
We need to keep track of a Member’s phone number.<br>
We need to keep track of a Member’s college.<br>
We need to keep track of a Member’s major.<br>
We need to keep track of a Member’s class.<br>
We want to keep track of a Member’s HAM call sign.<br>
We want to keep track of a Member’s shirt size.<br>
We need to keep track of a Member’s title/position.<br>
We want to keep track of a Member’s membership status.<br>
We need to keep track of the subteam a member is on.<br>
**MEMBER must be on at least one SUB TEAM.**<br>
**A MEMBER may supervise many SUB TEAMs**<br>
**MEMBER must work on at least 1 PROJECT.**<br>
**MEMBER may rent many PARTS.**<br>

## EXPENSE<br>
(underlined) We need to keep track of the unique web link to the expense, or some other way of purchasing.<br>
We want to keep track of the expected arrival date.<br>
We want to keep track of an item’s order date.<br>
We want to keep track of an item’s arrival status.<br>
We need to keep track of the type of expense.<br>
We need to keep track of an item’s name.<br>
We need to keep track of the quantity requested.<br>
We need to keep track of the quantity ordered.<br>
We need to keep track of the price per unit.<br>
We want to keep track of the expense priority level.<br>
We would like to find the total cost of a set of parts.<br>
**EXPENSE may be purchased by many SUBTEAMS.**<br>

## SUB TEAM<br>
(underlined) We need to keep track of aSub team’s unique name.<br>
We need to keep track of a Sub team’s parent team.<br>
We need a description of the Sub team’s purpose.<br>
We would like to find out the number of people that are a part of a team.<br>
We would like to find out the number of projects being worked on by a team.<br>
We would like to find out the expenses of each team.<br>
**SUBTEAM may work on many PROJECTS.**<br>
**SUBTEAM may use many PARTS.**<br>
**SUBTEAM must have one or more MEMBERS.**<br>
**SUBTEAM may purchase many EXPENSES.**<br>

## PROJECT<br>
(underlined) We need to keep track of a Project’s unique name.<br>
We want to keep track of a Project’s start date.<br>
We want to keep track of a Project’s due date.<br>
We need to record a Project’s goal/description.<br>
We want to keep track of a Project’s priority.<br>
We want to keep track of a Project’s completed date.<br>
We would like to find out how many people are working on a project.<br>
We would like to find out which subteams own a project.<br>
We would like to find out which parts are being used by a project.<br>
We would like to find out which member is supervising a project.<br>
**A PROJECT must be worked on by one to many MEMBERS.**<br>
**A PROJECT must be worked on by one SUBTEAMS.**<br>
**A PROJECT may use many PARTS.**<br>

## PART<br>
We need to keep track of a Part’s #.<br>
We need to keep track of a Part’s name.<br>
We need to keep track of a Part’s quantity.<br>
We need to keep track of a Part’s category.<br>
We want to keep track of a Part’s physical location.<br>
We want to keep track of a Part’s manufacturer.<br>
We would like to find out how and where the part is being used.<br>
We would like to find out the price of the part.<br>
We would like to find out where the part was purchased from.<br>
**A PART may be rented by many MEMBERS.**<br>
**A PART must be used for at least one PROJECT.**<br>
**A PART may be used by many SUBTEAMS.**<br>
