PROGRAM HelloDear(INPUT, OUTPUT);
USES
  DOS;
VAR
  Name: STRING;
BEGIN
  WRITELN;
  Name := GetEnv('QUERY_STRING');
  DELETE(Name, 1, 5);
  IF Name = ''
  THEN
    WRITELN('Hello anonimus!')
  ELSE 
    WRITELN('Hello dear ' ,Name , '!')
END.
