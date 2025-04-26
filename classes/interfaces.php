<?php

interface PaymentProcessor
{
  public function processPayment(float | int $amount): bool;
  public function refundPayment(float | int $amount): bool;
}

abstract class OnlinePaymentProcessor implements PaymentProcessor
{
  public function __construct(
    protected readonly string $apiKey
  ) {}

  abstract protected function validateApiKey(): bool;
  abstract protected function executePayment(float | int $amount): bool;
  abstract protected function executeRefund(float | int $amount): bool;

  public function processPayment(float | int $amount): bool
  {
    if (!$this->validateApiKey()) {
      throw new Exception("Invalid API key");
    }
    return $this->executePayment($amount);
  }

  public function refundPayment(float | int $amount): bool
  {
    if (!$this->validateApiKey()) {
      throw new Exception("Invalid API key");
    }
    return $this->executeRefund($amount);
  }
}

final class StripeProcessor extends OnlinePaymentProcessor
{
  protected function validateApiKey(): bool
  {
    return strpos($this->apiKey, 'sk_') == 0;
  }
  protected function executePayment(float | int $amount): bool
  {
    echo "Processing Stripe payment $amount \n";
    return true;
  }

  protected function executeRefund(float | int $amount): bool
  {
    echo "Processing Stripe refund of $amount\n";
    return true;
  }
}

final class PaypalProcessor extends OnlinePaymentProcessor
{
  protected function validateApiKey(): bool
  {
    return strlen($this->apiKey) == 32;
  }

  protected function executePayment(float | int $amount): bool
  {
    echo "Processing Paypal payment $amount \n";
    return true;
  }

  protected function executeRefund(float | int $amount): bool
  {
    echo "Processing Paypal refund of $amount\n";
    return true;
  }
}

final class CashPaymentProcessor implements PaymentProcessor
{
  public function processPayment(float | int $amount): bool
  {
    echo "Cash..";
    return true;
  }
  public function refundPayment(float | int $amount): bool
  {
    echo "Cash..";
    return true;
  }
}

class OrderProcessor
{
  public function __construct(private PaymentProcessor $paymentProcessor) {}

  public function processOrder(float | int $amount): void {
    if ($this->paymentProcessor->processPayment($amount)) {
      echo "Order processed successfully \n";
    } else {
      echo "Order processing failed \n";
    }
  }

  public function refundOrder(float | int $amount): void {
    if ($this->paymentProcessor->refundPayment($amount)) {
      echo "Order refunded successfully \n";
    } else {
      echo "Order refund failed \n";
    }
  }
}

$stripeProcessor = new StripeProcessor("sk_test_123456");
$paypalProcessor = new PaypalProcessor("valid_paypal_api_key_32charslong");
$cashProcessor = new CashPaymentProcessor();
var_dump($stripeProcessor);

$stripeOrder = new OrderProcessor($stripeProcessor);
$paypalOrder = new OrderProcessor($paypalProcessor);
$cashOrder = new OrderProcessor($cashProcessor);

$stripeOrder->processOrder(100.00);
$paypalOrder->processOrder(150.00);
$cashOrder->processOrder(50.00);

$stripeOrder->refundOrder(25.00);
$paypalOrder->refundOrder(50.00);
$cashOrder->refundOrder(10.00);