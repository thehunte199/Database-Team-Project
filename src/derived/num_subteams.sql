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
    