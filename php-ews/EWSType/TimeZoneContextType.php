<?php
/**
 * Contains EWSType_TimeZoneContextType.
 */

/**
 * Defines the time zone definition that is to be used as the default when
 * assigning the time zone for the DateTime properties of objects that are
 * created, updated, and retrieved by using Exchange Web Services (EWS).
 *
 * @package php-ews\Types
 */
class EWSType_TimeZoneContextType extends EWSType
{
    /**
     * Specifies the periods and transitions that define a time zone.
     *
     * @since Exchange 2010
     *
     * @var EWSType_TimeZoneDefinitionType
     */
    public $TimeZoneDefinition;
}
