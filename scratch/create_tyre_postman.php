<?php

$collection = [
    "info" => [
        "_postman_id" => "c6f87d40-7982-4c28-98e3-tyre12345678",
        "name" => "06_mmc_tyre_management_postman_collection",
        "description" => "Complete End-to-End Tyre Management & Booking Collection (Provider Tyre CRUD, Customer Search/Specs, Cart Add, Place Order, & Provider Order Acceptance)",
        "schema" => "https://schema.getpostman.com/json/collection/v2.1.0/collection.json"
    ],
    "item" => [
        [
            "name" => "01 - Provider Tyre Inventory Management (CRUD)",
            "item" => [
                [
                    "name" => "1. List Provider Tyres",
                    "request" => [
                        "method" => "GET",
                        "header" => [
                            ["key" => "Accept", "value" => "application/json"],
                            ["key" => "Authorization", "value" => "Bearer {{PROVIDER_TOKEN}}"]
                        ],
                        "url" => [
                            "raw" => "http://localhost/mmc/api/v1/provider/tyre/list?limit=10&offset=1",
                            "protocol" => "http",
                            "host" => ["localhost"],
                            "path" => ["mmc", "api", "v1", "provider", "tyre", "list"],
                            "query" => [
                                ["key" => "limit", "value" => "10"],
                                ["key" => "offset", "value" => "1"]
                            ]
                        ]
                    ]
                ],
                [
                    "name" => "2. Create Provider Tyre (With Detailed Specs)",
                    "request" => [
                        "method" => "POST",
                        "header" => [
                            ["key" => "Accept", "value" => "application/json"],
                            ["key" => "Content-Type", "value" => "application/json"],
                            ["key" => "Authorization", "value" => "Bearer {{PROVIDER_TOKEN}}"]
                        ],
                        "body" => [
                            "mode" => "raw",
                            "raw" => json_encode([
                                "category_id" => "675fb918-9d0c-4ee5-9a0a-904b42651033",
                                "brand" => "Michelin",
                                "model" => "Primacy 4",
                                "tyre_type" => "tubeless",
                                "season" => "all_season",
                                "vehicle_type" => "passenger_car",
                                "width" => "205",
                                "profile" => "55",
                                "rim_size" => "R16",
                                "speed_rating" => "V",
                                "load_index" => "91",
                                "size" => "205/55 R16 91V",
                                "price" => 120.00,
                                "stock" => 25,
                                "images" => []
                            ], JSON_PRETTY_PRINT)
                        ],
                        "url" => [
                            "raw" => "http://localhost/mmc/api/v1/provider/tyre/store",
                            "protocol" => "http",
                            "host" => ["localhost"],
                            "path" => ["mmc", "api", "v1", "provider", "tyre", "store"]
                        ]
                    ]
                ],
                [
                    "name" => "3. Get Provider Tyre Details",
                    "request" => [
                        "method" => "GET",
                        "header" => [
                            ["key" => "Accept", "value" => "application/json"],
                            ["key" => "Authorization", "value" => "Bearer {{PROVIDER_TOKEN}}"]
                        ],
                        "url" => [
                            "raw" => "http://localhost/mmc/api/v1/provider/tyre/details/c8821943-7f8a-495d-9da5-f938f2197e41",
                            "protocol" => "http",
                            "host" => ["localhost"],
                            "path" => ["mmc", "api", "v1", "provider", "tyre", "details", "c8821943-7f8a-495d-9da5-f938f2197e41"]
                        ]
                    ]
                ],
                [
                    "name" => "4. Update Provider Tyre",
                    "request" => [
                        "method" => "POST",
                        "header" => [
                            ["key" => "Accept", "value" => "application/json"],
                            ["key" => "Content-Type", "value" => "application/json"],
                            ["key" => "Authorization", "value" => "Bearer {{PROVIDER_TOKEN}}"]
                        ],
                        "body" => [
                            "mode" => "raw",
                            "raw" => json_encode([
                                "brand" => "Michelin",
                                "model" => "Primacy 4 ST",
                                "tyre_type" => "tubeless",
                                "season" => "all_season",
                                "vehicle_type" => "passenger_car",
                                "width" => "205",
                                "profile" => "55",
                                "rim_size" => "R16",
                                "speed_rating" => "V",
                                "load_index" => "91",
                                "size" => "205/55 R16 91V",
                                "price" => 125.00,
                                "stock" => 30
                            ], JSON_PRETTY_PRINT)
                        ],
                        "url" => [
                            "raw" => "http://localhost/mmc/api/v1/provider/tyre/update/c8821943-7f8a-495d-9da5-f938f2197e41",
                            "protocol" => "http",
                            "host" => ["localhost"],
                            "path" => ["mmc", "api", "v1", "provider", "tyre", "update", "c8821943-7f8a-495d-9da5-f938f2197e41"]
                        ]
                    ]
                ],
                [
                    "name" => "5. Toggle Tyre Status",
                    "request" => [
                        "method" => "POST",
                        "header" => [
                            ["key" => "Accept", "value" => "application/json"],
                            ["key" => "Authorization", "value" => "Bearer {{PROVIDER_TOKEN}}"]
                        ],
                        "url" => [
                            "raw" => "http://localhost/mmc/api/v1/provider/tyre/status-update/c8821943-7f8a-495d-9da5-f938f2197e41",
                            "protocol" => "http",
                            "host" => ["localhost"],
                            "path" => ["mmc", "api", "v1", "provider", "tyre", "status-update", "c8821943-7f8a-495d-9da5-f938f2197e41"]
                        ]
                    ]
                ],
                [
                    "name" => "6. Delete Provider Tyre",
                    "request" => [
                        "method" => "DELETE",
                        "header" => [
                            ["key" => "Accept", "value" => "application/json"],
                            ["key" => "Authorization", "value" => "Bearer {{PROVIDER_TOKEN}}"]
                        ],
                        "url" => [
                            "raw" => "http://localhost/mmc/api/v1/provider/tyre/delete/c8821943-7f8a-495d-9da5-f938f2197e41",
                            "protocol" => "http",
                            "host" => ["localhost"],
                            "path" => ["mmc", "api", "v1", "provider", "tyre", "delete", "c8821943-7f8a-495d-9da5-f938f2197e41"]
                        ]
                    ]
                ]
            ]
        ],
        [
            "name" => "02 - Customer Tyre Search & Catalog",
            "item" => [
                [
                    "name" => "1. Get Tyre Replacement Services in Category",
                    "request" => [
                        "method" => "GET",
                        "header" => [
                            ["key" => "Accept", "value" => "application/json"],
                            ["key" => "zoneid", "value" => "a1614dbe-4732-11ee-9702-dee6e8d77be4"]
                        ],
                        "url" => [
                            "raw" => "http://localhost/mmc/api/v1/customer/service/category/675fb918-9d0c-4ee5-9a0a-904b42651033?limit=10&offset=1",
                            "protocol" => "http",
                            "host" => ["localhost"],
                            "path" => ["mmc", "api", "v1", "customer", "service", "category", "675fb918-9d0c-4ee5-9a0a-904b42651033"],
                            "query" => [
                                ["key" => "limit", "value" => "10"],
                                ["key" => "offset", "value" => "1"]
                            ]
                        ]
                    ]
                ],
                [
                    "name" => "2. List Tyres with Specifications Filter",
                    "request" => [
                        "method" => "GET",
                        "header" => [
                            ["key" => "Accept", "value" => "application/json"],
                            ["key" => "zoneid", "value" => "a1614dbe-4732-11ee-9702-dee6e8d77be4"]
                        ],
                        "url" => [
                            "raw" => "http://localhost/mmc/api/v1/customer/tyre/list?tyre_type=tubeless&brand=Michelin&rim_size=R16&limit=10&offset=1",
                            "protocol" => "http",
                            "host" => ["localhost"],
                            "path" => ["mmc", "api", "v1", "customer", "tyre", "list"],
                            "query" => [
                                ["key" => "tyre_type", "value" => "tubeless"],
                                ["key" => "brand", "value" => "Michelin"],
                                ["key" => "rim_size", "value" => "R16"],
                                ["key" => "limit", "value" => "10"],
                                ["key" => "offset", "value" => "1"]
                            ]
                        ]
                    ]
                ],
                [
                    "name" => "3. Get Customer Tyre Details",
                    "request" => [
                        "method" => "GET",
                        "header" => [
                            ["key" => "Accept", "value" => "application/json"],
                            ["key" => "zoneid", "value" => "a1614dbe-4732-11ee-9702-dee6e8d77be4"]
                        ],
                        "url" => [
                            "raw" => "http://localhost/mmc/api/v1/customer/tyre/details/c8821943-7f8a-495d-9da5-f938f2197e41",
                            "protocol" => "http",
                            "host" => ["localhost"],
                            "path" => ["mmc", "api", "v1", "customer", "tyre", "details", "c8821943-7f8a-495d-9da5-f938f2197e41"]
                        ]
                    ]
                ]
            ]
        ],
        [
            "name" => "03 - Customer Tyre Booking Flow (Cart & Checkout)",
            "item" => [
                [
                    "name" => "1. Add Tyre & Service to Cart",
                    "request" => [
                        "method" => "POST",
                        "header" => [
                            ["key" => "Accept", "value" => "application/json"],
                            ["key" => "Content-Type", "value" => "application/json"],
                            ["key" => "Authorization", "value" => "Bearer {{CUSTOMER_TOKEN}}"],
                            ["key" => "zoneid", "value" => "a1614dbe-4732-11ee-9702-dee6e8d77be4"]
                        ],
                        "body" => [
                            "mode" => "raw",
                            "raw" => json_encode([
                                "service_id" => "9913c6e3-1f99-4929-989c-25484da50e00",
                                "tyre_id" => "c8821943-7f8a-495d-9da5-f938f2197e41",
                                "quantity" => 2,
                                "provider_id" => "cffcce91-5498-4b73-b571-8e6e69bbd89d"
                            ], JSON_PRETTY_PRINT)
                        ],
                        "url" => [
                            "raw" => "http://localhost/mmc/api/v1/customer/cart/add",
                            "protocol" => "http",
                            "host" => ["localhost"],
                            "path" => ["mmc", "api", "v1", "customer", "cart", "add"]
                        ]
                    ]
                ],
                [
                    "name" => "2. Get Customer Cart List",
                    "request" => [
                        "method" => "GET",
                        "header" => [
                            ["key" => "Accept", "value" => "application/json"],
                            ["key" => "Authorization", "value" => "Bearer {{CUSTOMER_TOKEN}}"],
                            ["key" => "zoneid", "value" => "a1614dbe-4732-11ee-9702-dee6e8d77be4"]
                        ],
                        "url" => [
                            "raw" => "http://localhost/mmc/api/v1/customer/cart/list?limit=10&offset=1",
                            "protocol" => "http",
                            "host" => ["localhost"],
                            "path" => ["mmc", "api", "v1", "customer", "cart", "list"],
                            "query" => [
                                ["key" => "limit", "value" => "10"],
                                ["key" => "offset", "value" => "1"]
                            ]
                        ]
                    ]
                ],
                [
                    "name" => "3. Place Tyre Booking Request",
                    "request" => [
                        "method" => "POST",
                        "header" => [
                            ["key" => "Accept", "value" => "application/json"],
                            ["key" => "Content-Type", "value" => "application/json"],
                            ["key" => "Authorization", "value" => "Bearer {{CUSTOMER_TOKEN}}"],
                            ["key" => "zoneid", "value" => "a1614dbe-4732-11ee-9702-dee6e8d77be4"]
                        ],
                        "body" => [
                            "mode" => "raw",
                            "raw" => json_encode([
                                "payment_method" => "cash_after_service",
                                "service_schedule" => "2026-09-26 10:00:00",
                                "service_address_id" => "CUSTOMER_ADDRESS_UUID_HERE",
                                "provider_id" => "cffcce91-5498-4b73-b571-8e6e69bbd89d"
                            ], JSON_PRETTY_PRINT)
                        ],
                        "url" => [
                            "raw" => "http://localhost/mmc/api/v1/customer/booking/request/send",
                            "protocol" => "http",
                            "host" => ["localhost"],
                            "path" => ["mmc", "api", "v1", "customer", "booking", "request", "send"]
                        ]
                    ]
                ]
            ]
        ],
        [
            "name" => "04 - Provider Booking Operations",
            "item" => [
                [
                    "name" => "1. Provider List Bookings",
                    "request" => [
                        "method" => "POST",
                        "header" => [
                            ["key" => "Accept", "value" => "application/json"],
                            ["key" => "Content-Type", "value" => "application/json"],
                            ["key" => "Authorization", "value" => "Bearer {{PROVIDER_TOKEN}}"]
                        ],
                        "body" => [
                            "mode" => "raw",
                            "raw" => json_encode([
                                "booking_status" => "pending",
                                "limit" => 10,
                                "offset" => 1
                            ], JSON_PRETTY_PRINT)
                        ],
                        "url" => [
                            "raw" => "http://localhost/mmc/api/v1/provider/booking",
                            "protocol" => "http",
                            "host" => ["localhost"],
                            "path" => ["mmc", "api", "v1", "provider", "booking"]
                        ]
                    ]
                ],
                [
                    "name" => "2. Provider Get Single Booking Details",
                    "request" => [
                        "method" => "GET",
                        "header" => [
                            ["key" => "Accept", "value" => "application/json"],
                            ["key" => "Authorization", "value" => "Bearer {{PROVIDER_TOKEN}}"]
                        ],
                        "url" => [
                            "raw" => "http://localhost/mmc/api/v1/provider/booking/BOOKING_UUID_HERE",
                            "protocol" => "http",
                            "host" => ["localhost"],
                            "path" => ["mmc", "api", "v1", "provider", "booking", "BOOKING_UUID_HERE"]
                        ]
                    ]
                ],
                [
                    "name" => "3. Provider Accept Booking Request",
                    "request" => [
                        "method" => "PUT",
                        "header" => [
                            ["key" => "Accept", "value" => "application/json"],
                            ["key" => "Authorization", "value" => "Bearer {{PROVIDER_TOKEN}}"]
                        ],
                        "url" => [
                            "raw" => "http://localhost/mmc/api/v1/provider/booking/request-accept/BOOKING_UUID_HERE",
                            "protocol" => "http",
                            "host" => ["localhost"],
                            "path" => ["mmc", "api", "v1", "provider", "booking", "request-accept", "BOOKING_UUID_HERE"]
                        ]
                    ]
                ],
                [
                    "name" => "4. Provider Change Booking Status (Ongoing / Completed / Canceled)",
                    "request" => [
                        "method" => "PUT",
                        "header" => [
                            ["key" => "Accept", "value" => "application/json"],
                            ["key" => "Content-Type", "value" => "application/json"],
                            ["key" => "Authorization", "value" => "Bearer {{PROVIDER_TOKEN}}"]
                        ],
                        "body" => [
                            "mode" => "raw",
                            "raw" => json_encode([
                                "booking_status" => "completed"
                            ], JSON_PRETTY_PRINT)
                        ],
                        "url" => [
                            "raw" => "http://localhost/mmc/api/v1/provider/booking/status-update/BOOKING_UUID_HERE",
                            "protocol" => "http",
                            "host" => ["localhost"],
                            "path" => ["mmc", "api", "v1", "provider", "booking", "status-update", "BOOKING_UUID_HERE"]
                        ]
                    ]
                ]
            ]
        ]
    ]
];

file_put_contents('c:/xampp/htdocs/mmc/06_mmc_tyre_management_postman_collection.json', json_encode($collection, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
echo "Generated complete Tyre Booking Postman Collection successfully!\n";
