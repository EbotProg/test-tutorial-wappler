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
              "table": "users",
              "column": "*"
            }
          ],
          "params": [],
          "table": {
            "name": "users"
          },
          "primary": "UserID",
          "joins": [],
          "query": "select * from `users`"
        }
      },
      "output": true,
      "meta": [
        {
          "type": "number",
          "name": "UserID"
        },
        {
          "type": "text",
          "name": "UserName"
        },
        {
          "type": "text",
          "name": "UserPassword"
        },
        {
          "type": "number",
          "name": "UserLevel"
        }
      ],
      "outputType": "array"
    }
  }
}
JSON
);
?>