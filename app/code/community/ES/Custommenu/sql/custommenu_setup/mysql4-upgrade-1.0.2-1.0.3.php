<?php

$installer = $this;

$installer->startSetup();

$installer->run("
  ALTER TABLE es_custommenu_item CHANGE COLUMN es_custommenu_item.order es_custommenu_item.position INT(4);
");

$installer->endSetup();
