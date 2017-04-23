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
