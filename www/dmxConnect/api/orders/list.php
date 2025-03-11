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
              "table": "orders",
              "column": "*"
            }
          ],
          "params": [],
          "table": {
            "name": "orders"
          },
          "primary": "OrderID",
          "joins": [],
          "query": "select * from `orders`"
        }
      },
      "output": true,
      "meta": [
        {
          "type": "number",
          "name": "OrderID"
        },
        {
          "type": "number",
          "name": "OrderCustomerID"
        },
        {
          "type": "number",
          "name": "OrderAmount"
        },
        {
          "type": "text",
          "name": "OrderShipName"
        },
        {
          "type": "text",
          "name": "OrderShipAddress"
        },
        {
          "type": "text",
          "name": "OrderShipAddress2"
        },
        {
          "type": "text",
          "name": "OrderCity"
        },
        {
          "type": "text",
          "name": "OrderState"
        },
        {
          "type": "text",
          "name": "OrderZip"
        },
        {
          "type": "text",
          "name": "OrderCountry"
        },
        {
          "type": "text",
          "name": "OrderPhone"
        },
        {
          "type": "number",
          "name": "OrderPostage"
        },
        {
          "type": "number",
          "name": "OrderTax"
        },
        {
          "type": "text",
          "name": "OrderEmail"
        },
        {
          "type": "datetime",
          "name": "OrderDate"
        },
        {
          "type": "boolean",
          "name": "OrderShipped"
        },
        {
          "type": "text",
          "name": "OrderTrackingNumber"
        }
      ],
      "outputType": "array"
    }
  }
}
JSON
);
?>