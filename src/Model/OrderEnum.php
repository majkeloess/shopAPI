<?php


namespace App\Model;

enum OrderEnum
{
  case PENDING = 'pending';
  case PROCESSING = 'processing';
  case SHIPPED = 'shipped';
  case COMPLETED = 'completed';
  case CANCELLED = 'cancelled';

}