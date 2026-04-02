# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## 0.1.0-alpha - unreleased

This is an alpha version! The changes listed here are not final.

### Added
- Initial version.

### Changed
- Add RTC-specific pixel beacons (`pinghub.rtc.*`) alongside existing shared beacons for dedicated RTC dashboarding, and add new beacons for JWT fetch latency/errors and send drops.
- Disable RTC in site editor
- Update package dependencies.

### Fixed
- Avoid endless PingHub reconnection loop on persistent WebSocket or JWT fetch errors
- Defer reconnect backoff reset until WebSocket connection has been stable for 30 seconds
- Disable RTC for super admins who are not members of the blog to prevent exposing their presence during support sessions.
- PingHub: support root/comment entity type so collaborative notes sync in real time over WebSockets
