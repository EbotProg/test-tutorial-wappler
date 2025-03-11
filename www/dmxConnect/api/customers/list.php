<?php
require('../../../dmxConnectLib/dmxConnect.php');


$app = new \lib\App();

$app->define(<<<'JSON'
{
  "meta": {
    "$_GET": [
      {
        "type": "text",
        "name": "sort"
      },
      {
        "type": "text",
        "name": "dir"
      }
    ]
  },
  "exec": {
    "steps": {
      "name": "query",
      "module": "dbconnector",
      "action": "select",
      "options": {
        "connection": "db",
        "sql": {
          "type": "select",
          "columns": [
            {
              "table": "customers",
              "column": "*"
            }
          ],
          "params": [],
          "table": {
            "name": "customers"
          },
          "primary": "CustomerID",
          "joins": [],
          "query": "select * from `customers`"
        }
      },
      "output": true,
      "meta": [
        {
          "type": "number",
          "name": "CustomerID"
        },
        {
          "type": "text",
          "name": "CustomerEmail"
        },
        {
          "type": "text",
          "name": "CustomerPassword"
        },
        {
          "type": "text",
          "name": "CustomerFirstName"
        },
        {
          "type": "text",
          "name": "CustomerLastName"
        },
        {
          "type": "text",
          "name": "CustomerAddress"
        },
        {
          "type": "text",
          "name": "CustomerCity"
        },
        {
          "type": "text",
          "name": "CustomerState"
        },
        {
          "type": "text",
          "name": "CustomerZip"
        },
        {
          "type": "text",
          "name": "CustomerCountry"
        },
        {
          "type": "text",
          "name": "CustomerPhone"
        },
        {
          "type": "boolean",
          "name": "CustomerEmailVerified"
        },
        {
          "type": "datetime",
          "name": "CustomerRegistrationDate"
        },
        {
          "type": "text",
          "name": "CustomerVerificationCode"
        },
        {
          "type": "text",
          "name": "CustomerIP"
        }
      ],
      "outputType": "array"
    }
  }
}
JSON
);
?>