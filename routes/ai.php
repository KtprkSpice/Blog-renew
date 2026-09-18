<?php

use App\Mcp\Servers\AppServer;
use Laravel\Mcp\Facades\Mcp;

// Mcp::web('/mcp/demo', \App\Mcp\Servers\PublicServer::class);
Mcp::web('/mcp', AppServer::class);
