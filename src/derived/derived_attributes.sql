/* Returns the number rows stored in the subteams table. */
SELECT COUNT(*)
    FROM subteams;

/* Returns all of the parts used by a project and groups multiples of the same part w/ their count*/
SELECT part.partNumber, part.partName, part.partLocation, count(part.partNumber), uses.dateUsed
    FROM part, uses
    WHERE part.partNumber = uses.partNumber AND
          uses.projectName = "<SPECIFIED NAME>"
    ORDER BY uses.dateUsed
    GROUP BY part.partNumber;

/* Returns the number of members working on the specified project */
SELECT COUNT(*)
    FROM member, working_on
    WHERE member.bannerID = working_on.bannerID AND
          projectName = "<SPECIFIED NAME>";

/* Finds the owning subteam */
SELECT subteamName
    FROM project
    WHERE projectName = "<SPECIFIED NAME>";

/* Finds the unit price of a part based on its number */
SELECT unitPrice
    FROM part
    WHERE partNumber = "<SPECIFIED NUMBER>";

/* Finds the total cost of all parts purchased */
SELECT SUM(unitPrice * quantityOrdered)
    FROM purchase;

/* Finds the number of projects being worked on. */
SELECT COUNT(*)
    FROM project;

/* Finds the number of members on a subteam */
SELECT COUNT(*)
    FROM member, subteam
    WHERE member.bannerID = working_on.bannerID AND
          teamName = "<SPECIFIED NAME>";
