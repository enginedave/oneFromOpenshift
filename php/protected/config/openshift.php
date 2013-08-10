INformation from openshift on the mongo database

MongoDB 2.2 database added.  Please make note of these credentials:
   Root User:     admin
   Root Password: 3UtiRg4ZdhYq
   Database Name: one
Connection URL: mongodb://$OPENSHIFT_MONGODB_DB_HOST:$OPENSHIFT_MONGODB_DB_PORT/

rhc cartridge list

rhc cartridge start -a one -c mongodb-2.2
rhc cartridge stop -a one -c mongodb-2.2
rhc cartridge restart -a one -c mongodb-2.2
rhc cartridge reload -a one -c mongodb-2.2
rhc cartridge status -a one -c mongodb-2.2

rhc cartridge remove -a one -c mongodb-2.2

NOTE the actual values of the environment variables have to be got by 
ssh'ing into the app and inserting them into the string. Cannot seem to access 
the actual values from the env functions!


ROCKMONGO DETAILS

the rockmongo interface has been added to the gear for the application "one" using
the following command

	rhc cartridge add rockmongo-1.1 -a {appName}
in my case
	rhc cartridge add rockmongo-1.1 -a one 


david@david-AMILO-XI-1546 ~/webdev/public_html/one $ rhc cartridge add rockmongo-1.1 -a one
Adding rockmongo-1.1 to application 'one' ... done

rockmongo-1.1 (RockMongo 1.1)
-----------------------------
  Gears:          Located with php-5.3, mongodb-2.2
  Connection URL: https://one-dgapps.rhcloud.com/rockmongo/

Please make note of these MongoDB credentials again:
  RockMongo User: admin
  RockMongo Password: 3UtiRg4ZdhYq
URL: https://one-dgapps.rhcloud.com/rockmongo/

