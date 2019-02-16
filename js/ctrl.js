AmCharts.makeChart( "mapdiv", {

    "type": "map",

    "dataProvider": {
        "map": "cameroonLow",
        "areas": [
            { "id":"CM-AD", "color": "#d7d7eb"},
            { "id":"CM-CE", "color": "#d7d7eb"},
            { "id":"CM-EN", "color": "#d7d7eb"},
            { "id":"CM-SW", "color": "#d7d7eb"},
            { "id":"CM-SU", "color": "#d7d7eb"},
            { "id":"CM-OU", "color": "#d7d7eb"},
            { "id":"CM-NW", "color": "#d7d7eb"},
            { "id":"CM-NO", "color": "#d7d7eb"},
            { "id":"CM-LT", "color": "#d7d7eb"},
            { "id":"CM-ES", "color": "#d7d7eb"}
        ],
        /* putting a point at yaounde */
        "images": [ {
            "latitude":  4.4666700,
            "longitude": 11.3166700,
            "scale": 1,
            "label": "Centre",
            "labelShiftY": 2,
            "zoomLevel": 5,
            "title": "Center",
            "description": "Center is the most populous city in the United States and the center of the New York Metropolitan Area, one of the most populous metropolitan areas in the world."
        } ]
    },

    "areasSettings": {
        "autoZoom": true,
        "selectedColor": "#CC0000"

    },
} );

