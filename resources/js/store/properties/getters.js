
    fetchRecordBySlug: (state) => (slug) => {
      return state.properties.find(property => property.slug === slug);
    }
