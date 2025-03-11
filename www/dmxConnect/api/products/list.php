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
      "name": "qryProducts",
      "module": "dbconnector",
      "action": "select",
      "options": {
        "connection": "db",
        "sql": {
          "type": "select",
          "columns": [
            {
              "table": "products",
              "column": "*"
            }
          ],
          "params": [],
          "table": {
            "name": "products"
          },
          "primary": "ProductID",
          "joins": [],
          "query": "select * from `products`"
        }
      },
      "output": true,
      "meta": [
        {
          "type": "number",
          "name": "ProductID"
        },
        {
          "type": "text",
          "name": "ProductSKU"
        },
        {
          "type": "text",
          "name": "ProductName"
        },
        {
          "type": "number",
          "name": "ProductPrice"
        },
        {
          "type": "number",
          "name": "ProductWeight"
        },
        {
          "type": "text",
          "name": "ProductCartDesc"
        },
        {
          "type": "text",
          "name": "ProductShortDesc"
        },
        {
          "type": "text",
          "name": "ProductLongDesc"
        },
        {
          "type": "text",
          "name": "ProductThumb"
        },
        {
          "type": "text",
          "name": "ProductImage"
        },
        {
          "type": "number",
          "name": "ProductCategoryID"
        },
        {
          "type": "datetime",
          "name": "ProductUpdateDate"
        },
        {
          "type": "number",
          "name": "ProductStock"
        },
        {
          "type": "boolean",
          "name": "ProductLive"
        },
        {
          "type": "boolean",
          "name": "ProductUnlimited"
        },
        {
          "type": "text",
          "name": "ProductLocation"
        }
      ],
      "outputType": "array"
    }
  }
}
JSON
);
?>