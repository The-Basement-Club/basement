import routeConstants from "./routeConstants";
import ValidationError from "./Exceptions/ValidationError";

export default class Model {
    static for(model) {
        return new Model(model);
    }

    constructor(model) {
        this.model = model;
    }

    async paginate(perPage = 15, page = 1) {
        const { data: { data, ...pagination } } = await axios.get(buildUrl('/api/' + this.model, {
            page,
            limit: perPage,
        }));


        return {
            pagination,
            data
        }
    }

    async find({ id, ...options }) {
        if (!id) {
            id = arguments[0];
        }

        const { data } = await axios.get('/api/' + this.model + '/' + id);

        return data
    }

    async search(query) {
        const { data: { data } } = await axios.get('/api/' + this.model + '?q=' + query);

        return data
    }

    async findOrCreate(where, data) {
        const model = this.search(where);
        if (!model) {
            return this.create(data);
        }

        return model[0];
    }

    async create(data) {
        try {
            const { data: created } = await axios.post('/api/' + this.model, data);

            return created
        } catch (e) {
            if (e.response.status === 422) {
                throw new ValidationError(e.response.data.errors);
            }

            throw e;
        }
    }
}
