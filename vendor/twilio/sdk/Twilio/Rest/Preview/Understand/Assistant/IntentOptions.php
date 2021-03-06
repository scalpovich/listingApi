<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Preview\Understand\Assistant;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
abstract class IntentOptions {
    /**
     * @param string $friendlyName A user-provided string that identifies this
     *                             resource. It is non-unique and can up to 255
     *                             characters long.
     * @param array $actions The actions
     * @return CreateIntentOptions Options builder
     */
    public static function create($friendlyName = Values::NONE, $actions = Values::NONE) {
        return new CreateIntentOptions($friendlyName, $actions);
    }

    /**
     * @param string $friendlyName A user-provided string that identifies this
     *                             resource. It is non-unique and can up to 255
     *                             characters long.
     * @param string $uniqueName A user-provided string that uniquely identifies
     *                           this resource as an alternative to the sid. Unique
     *                           up to 64 characters long.
     * @param array $actions The actions
     * @return UpdateIntentOptions Options builder
     */
    public static function update($friendlyName = Values::NONE, $uniqueName = Values::NONE, $actions = Values::NONE) {
        return new UpdateIntentOptions($friendlyName, $uniqueName, $actions);
    }
}

class CreateIntentOptions extends Options {
    /**
     * @param string $friendlyName A user-provided string that identifies this
     *                             resource. It is non-unique and can up to 255
     *                             characters long.
     * @param array $actions The actions
     */
    public function __construct($friendlyName = Values::NONE, $actions = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['actions'] = $actions;
    }

    /**
     * A user-provided string that identifies this resource. It is non-unique and can up to 255 characters long.
     * 
     * @param string $friendlyName A user-provided string that identifies this
     *                             resource. It is non-unique and can up to 255
     *                             characters long.
     * @return $this Fluent Builder
     */
    public function setFriendlyName($friendlyName) {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * The actions
     * 
     * @param array $actions The actions
     * @return $this Fluent Builder
     */
    public function setActions($actions) {
        $this->options['actions'] = $actions;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Preview.Understand.CreateIntentOptions ' . implode(' ', $options) . ']';
    }
}

class UpdateIntentOptions extends Options {
    /**
     * @param string $friendlyName A user-provided string that identifies this
     *                             resource. It is non-unique and can up to 255
     *                             characters long.
     * @param string $uniqueName A user-provided string that uniquely identifies
     *                           this resource as an alternative to the sid. Unique
     *                           up to 64 characters long.
     * @param array $actions The actions
     */
    public function __construct($friendlyName = Values::NONE, $uniqueName = Values::NONE, $actions = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['uniqueName'] = $uniqueName;
        $this->options['actions'] = $actions;
    }

    /**
     * A user-provided string that identifies this resource. It is non-unique and can up to 255 characters long.
     * 
     * @param string $friendlyName A user-provided string that identifies this
     *                             resource. It is non-unique and can up to 255
     *                             characters long.
     * @return $this Fluent Builder
     */
    public function setFriendlyName($friendlyName) {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * A user-provided string that uniquely identifies this resource as an alternative to the sid. Unique up to 64 characters long.
     * 
     * @param string $uniqueName A user-provided string that uniquely identifies
     *                           this resource as an alternative to the sid. Unique
     *                           up to 64 characters long.
     * @return $this Fluent Builder
     */
    public function setUniqueName($uniqueName) {
        $this->options['uniqueName'] = $uniqueName;
        return $this;
    }

    /**
     * The actions
     * 
     * @param array $actions The actions
     * @return $this Fluent Builder
     */
    public function setActions($actions) {
        $this->options['actions'] = $actions;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Preview.Understand.UpdateIntentOptions ' . implode(' ', $options) . ']';
    }
}