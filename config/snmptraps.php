<?php

 /*
 | !!!! DO NOT EDIT THIS FILE !!!!
 |
 | You can change settings by setting them in the environment or .env
 | If there is something you need to change, but is not available as an environment setting,
 | request an environment variable to be created upstream or send a pull request.
 */

return [
    'trap_handlers' => [
        'SNMPv2-MIB::authenticationFailure' => \LibreNMS\Snmptrap\Handlers\AuthenticationFailure::class,
        'BGP4-MIB::bgpEstablished' => \LibreNMS\Snmptrap\Handlers\BgpEstablished::class,
        'BGP4-MIB::bgpBackwardTransition' => \LibreNMS\Snmptrap\Handlers\BgpBackwardTransition::class,
        'IF-MIB::linkUp' => \LibreNMS\Snmptrap\Handlers\LinkUp::class,
        'IF-MIB::linkDown' => \LibreNMS\Snmptrap\Handlers\LinkDown::class,
        'MG-SNMP-UPS-MIB::upsmgUtilityFailure' => \LibreNMS\Snmptrap\Handlers\UpsmgUtilityFailure::class,
        'MG-SNMP-UPS-MIB::upsmgUtilityRestored' => \LibreNMS\Snmptrap\Handlers\UpsmgUtilityRestored::class,
    ]
];
