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
      "module": "dbupdater",
      "action": "custom",
      "options": {
        "connection": "db",
        "sql": {
          "query": "INSERT INTO products (\n    ProductSKU, ProductName, ProductPrice, ProductWeight, ProductCartDesc, \n    ProductShortDesc, ProductLongDesc, ProductThumb, ProductImage, ProductCategoryID, \n    ProductUpdateDate, ProductStock, ProductLive, ProductUnlimited, ProductLocation\n) VALUES \n(\n    'SKU-10001', 'Wireless Mouse', 25.99, 0.3, 'Compact wireless mouse.', \n    'Ergonomic design with long battery life.', 'A high-precision wireless mouse with adjustable DPI settings.', \n    'mouse_thumb.jpg', 'mouse.jpg', 1, NOW(), 100, 1, 0, 'Warehouse A'\n),\n(\n    'SKU-10002', 'Mechanical Keyboard', 79.99, 1.2, 'RGB backlit keyboard.', \n    'Tactile switches with customizable lighting.', 'Premium mechanical keyboard with hot-swappable keys.', \n    'keyboard_thumb.jpg', 'keyboard.jpg', 1, NOW(), 75, 1, 0, 'Warehouse B'\n),\n(\n    'SKU-10003', 'Gaming Headset', 59.99, 0.5, 'Noise-canceling microphone.', \n    'Comfortable ear cushions for long gaming sessions.', 'High-fidelity audio headset with surround sound.', \n    'headset_thumb.jpg', 'headset.jpg', 2, NOW(), 50, 1, 0, 'Warehouse A'\n),\n(\n    'SKU-10004', 'Portable SSD 1TB', 129.99, 0.2, 'Fast data transfer speeds.', \n    'Lightweight and durable storage device.', 'USB 3.2 external SSD for high-speed data transfer.', \n    'ssd_thumb.jpg', 'ssd.jpg', 3, NOW(), 40, 1, 0, 'Warehouse C'\n),\n(\n    'SKU-10005', 'Smartwatch', 199.99, 0.1, 'Track fitness and receive notifications.', \n    'Water-resistant with a high-resolution display.', 'Advanced smartwatch with heart rate monitoring and GPS.', \n    'smartwatch_thumb.jpg', 'smartwatch.jpg', 4, NOW(), 30, 1, 0, 'Warehouse D'\n);\n",
          "params": []
        }
      },
      "output": true,
      "meta": [],
      "outputType": "array",
      "type": "dbcustom_query"
    }
  }
}
JSON
);
?>