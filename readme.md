## Installation


### Import the database dump

The database we will be using it's called `northwind`.

```
$ gunzip < northwind.sql.gz | mysql -u USERNAME -pPASSWORD northwind
```


## More

(Optional) For those wanting to preserve the changes done, the other way done:

```
$ mysqldump -u USERNAME -pPASSWORD northwind | gzip -c | cat > northwind.sql.gz
```