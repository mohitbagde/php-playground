<?php
namespace GuzzleHttp\Promise;

/**
 * Exception.php that is set as the reason for a promise that has been cancelled.
 */
class CancellationException extends RejectionException
{
}
