## Installation


### Import the database dump

The database we will be using it's called `employees`.

```
$ gunzip < employees.sql.gz | mysql -u USERNAME -pPASSWORD employees
```


## More

(Optional) For those wanting to preserve the changes done, the other way done:

```
$ mysqldump -u USERNAME -pPASSWORD employees | gzip -c | cat > employees.sql.gz
```