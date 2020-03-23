PROGRAM WorkWithQueryString(INPUT, OUTPUT);
USES
  GPC;
FUNCTION GetQueryStringParameter(Key: STRING): STRING;
VAR
  Check, Querystring : STRING;
BEGIN
  Check := '';
  QueryString := GetEnv('QUERY_STRING');
  Check := Copy(QueryString, pos(key, QueryString), length(key));
  IF Key = Check
  THEN
    BEGIN 
      Delete(QueryString, 1, pos(key, QueryString) + length(key));
      IF (pos('&', QueryString) > 1)
      THEN
        Delete(QueryString, pos('&', QueryString), length(QueryString));
        GetQueryStringParameter := QueryString
    END
  ELSE
    GetQueryStringParameter := 'No Request'
END;
BEGIN {WorkWithQueryString}
  WRITELN;
  WRITELN('First Name: ', GetQueryStringParameter('first name'));
  WRITELN('Last Name: ', GetQueryStringParameter('last name'));
  WRITELN('Age: ', GetQueryStringParameter('age'))
END. {WorkWithQueryString}
