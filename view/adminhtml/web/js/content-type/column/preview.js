/**
 * Copyright © 2025 NortN. All rights reserved.
 */

define([
    'jquery',
    'knockout',
    'Magento_PageBuilder/js/content-type/column/preview' // Import the original Preview
], function ($, ko, OriginalPreview) {
    'use strict';

    /**
     * Extension of Preview to add updateFlexBasis.
     */
    var ExtendedPreview = function (contentType, config, observableUpdater) {
        // Call the constructor of the original Preview
        OriginalPreview.call(this, contentType, config, observableUpdater);

        // Add subscription to the width event
        this.contentType.dataStore.subscribe(this.updateFlexBasis.bind(this), "width");
    };

    // Set the prototype of ExtendedPreview to the prototype of OriginalPreview
    ExtendedPreview.prototype = Object.create(OriginalPreview.prototype);
    ExtendedPreview.prototype.constructor = ExtendedPreview;

    /**
     * Updates flex-basis according to width.
     */
    ExtendedPreview.prototype.updateFlexBasis = function () {
        this.contentType.dataStore.set('flex_basis', this.contentType.dataStore.get('width'));
    };

    return ExtendedPreview;
});