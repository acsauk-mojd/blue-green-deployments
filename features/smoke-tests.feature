# This file contains a user story for demonstration only.
# Learn how to get started with Behat and BDD on Behat's website:
# http://behat.org/en/latest/quick_start.html

Feature:
  Scenario: It receives a response from Symfony's kernel
    When I am on "/health-check"
    Then the response status code should be 200
