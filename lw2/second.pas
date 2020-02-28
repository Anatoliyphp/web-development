PROGRAM PaulRevere(INPUT,OUTPUT);
USES DOS;
VAR
  Lanterns: CHAR;
BEGIN {PaulRevere}
  WRITELN('HTTP/1.1 200 OK');
  WRITELN('Content Type: text/plant');
  WRITELN;
  WRITELN(GetEnv('QUERY_STRING'));
  READ(Lanterns);
  IF Lanterns = '1'
    THEN
      WRITELN('The British are coming by land.')
    ELSE
      IF Lanterns = '2'
      THEN
        WRITELN('The British are coming by sea.')
      ELSE
        WRITELN('The North Church shows only ''', Lanterns, '''.')
END. {PaulRevere}

