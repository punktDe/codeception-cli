# punktde/codeception-cli

## Gherkin Steps for the Codeception CLI module

### How to use

Just add the trait `PunktDe\Codeception\Cli\ActorTraits\Cli` to your testing actor. Then you can use `*.feature` files to write your gherkin tests with the new steps.

#### Example actor 

```
<?php

/*
 *  (c) 2018 punkt.de GmbH - Karlsruhe, Germany - http://punkt.de
 *  All rights reserved.
 */

/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;
    use \PunktDe\Codeception\Cli\ActorTraits\Cli; // use the cli steps trait
}
``` 

#### Which steps are there? 

To get all the steps available you can just run the following command:

```
vendor/bin/codecept -c path/to/codeception.yaml gherkin:steps suiteName
```

This will give you a table of all the steps available.

