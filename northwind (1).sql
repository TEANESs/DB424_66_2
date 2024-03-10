SELECT * FROM activity A
WHERE start >= NOW() AND available > 0
  AND NOT EXISTS (
    SELECT activityID
    FROM register
    WHERE studentID='xxxxxxxx'
    AND activityID=yyy
  )