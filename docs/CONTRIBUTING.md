# Contributing

## Scope

This project is a production-style CodeIgniter HMVC application with bundled third-party assets.
Contributions should be focused, minimal, and avoid unrelated changes.

## Development Guidelines

1. Keep changes module-scoped where possible (`app/modules/<module>`).
2. Preserve existing coding style in touched files.
3. Do not refactor unrelated code in the same PR.
4. Avoid modifying vendored third-party code unless security/critical fix is required.
5. Document behavior changes in README/docs when relevant.

## Typical Change Workflow

1. Identify affected module(s)
2. Implement minimal fix
3. Validate impacted flows manually
4. Update docs if behavior/setup changed
5. Open PR with clear summary and risk notes

## Testing Expectations

This repository currently lacks a unified test suite.
For now:
- run targeted syntax checks where practical
- validate primary user/admin flow manually
- include reproducible verification steps in PR notes

## Security Expectations

- Never commit credentials or API secrets
- Sanitize and validate user input in controllers/models
- Prefer framework query builder/parameterized SQL
- Keep dependencies patched

## PR Quality Checklist

- [ ] Scope is limited to requested change
- [ ] No unrelated file churn
- [ ] Docs updated if needed
- [ ] Verification steps included
- [ ] Security implications reviewed
