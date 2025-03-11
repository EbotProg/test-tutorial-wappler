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
              "table": "company",
              "column": "*"
            }
          ],
          "params": [],
          "table": {
            "name": "company"
          },
          "primary": "CompanyID",
          "joins": [],
          "query": "select * from `company`"
        }
      },
      "output": true,
      "meta": [
        {
          "type": "number",
          "name": "CompanyID"
        },
        {
          "type": "text",
          "name": "CompanyName"
        },
        {
          "type": "text",
          "name": "CompanyAddress"
        },
        {
          "type": "text",
          "name": "CompanyCity"
        },
        {
          "type": "text",
          "name": "CompanyState"
        },
        {
          "type": "text",
          "name": "CompanyZip"
        },
        {
          "type": "text",
          "name": "CompanyCountry"
        },
        {
          "type": "text",
          "name": "CompanyEmail"
        },
        {
          "type": "text",
          "name": "CompanyPhone"
        },
        {
          "type": "text",
          "name": "CompanyWebsite"
        },
        {
          "type": "text",
          "name": "CompanyLogo"
        },
        {
          "type": "date",
          "name": "CompanyRegistrationDate"
        },
        {
          "type": "text",
          "name": "CompanyBusinessID"
        }
      ],
      "outputType": "array"
    }
  }
}
JSON
);
?>