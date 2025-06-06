<?php

/*
 * Copyright 2018 Google LLC
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are
 * met:
 *
 *     * Redistributions of source code must retain the above copyright
 * notice, this list of conditions and the following disclaimer.
 *     * Redistributions in binary form must reproduce the above
 * copyright notice, this list of conditions and the following disclaimer
 * in the documentation and/or other materials provided with the
 * distribution.
 *     * Neither the name of Google Inc. nor the names of its
 * contributors may be used to endorse or promote products derived from
 * this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */
namespace DeliciousBrains\WP_Offload_Media\Gcp\Google\ApiCore\Transport;

use DeliciousBrains\WP_Offload_Media\Gcp\Google\ApiCore\BidiStream;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\ApiCore\Call;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\ApiCore\ClientStream;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\ApiCore\ServerStream;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\ApiCore\ValidationException;
use DeliciousBrains\WP_Offload_Media\Gcp\GuzzleHttp\Promise\PromiseInterface;
interface TransportInterface
{
    /**
     * Starts a bidi streaming call.
     *
     * @param Call $call
     * @param array<mixed> $options
     *
     * @return BidiStream
     */
    public function startBidiStreamingCall(Call $call, array $options);
    /**
     * Starts a client streaming call.
     *
     * @param Call $call
     * @param array<mixed> $options
     *
     * @return ClientStream
     */
    public function startClientStreamingCall(Call $call, array $options);
    /**
     * Starts a server streaming call.
     *
     * @param Call $call
     * @param array<mixed> $options
     *
     * @return ServerStream
     */
    public function startServerStreamingCall(Call $call, array $options);
    /**
     * Returns a promise used to execute network requests.
     *
     * @param Call $call
     * @param array<mixed> $options
     *
     * @return PromiseInterface
     * @throws ValidationException
     */
    public function startUnaryCall(Call $call, array $options);
    /**
     * Closes the connection, if one exists.
     *
     * @return void
     */
    public function close();
}
