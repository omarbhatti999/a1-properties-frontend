import Blog from "../../apis/Blogs";

export const getBlogs = ({ commit }) => {
    Blog.all().then(response => {
        commit('SET_BLOGS', response.data.blogs);
        commit('SET_LOADING',false)
    })
}
export const getFeaturedBlogs = ({ commit }) => {
    Blog.featured().then(response => {
        commit('SET_FEATURED_BLOGS', response.data.blogs);
        commit('SET_LOADING',false)
    })
}

export const getBlog = ({ commit }, blogId) => {
    Blog.show(blogId).then(response => {
        commit('SET_BLOG', response.data);
    })
}
export const getBlogBySlug = ({ commit }, slug) => {
    Blog.getBySlug(slug).then(response => {
        commit("SET_BLOG", response.data.blog);
    });
};
