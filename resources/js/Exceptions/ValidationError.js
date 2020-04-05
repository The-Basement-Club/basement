export default class ValidationError extends Error {
    constructor(validationErrors) {
        super();
        this.validationErrors = validationErrors;
    }
}