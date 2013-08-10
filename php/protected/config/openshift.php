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


