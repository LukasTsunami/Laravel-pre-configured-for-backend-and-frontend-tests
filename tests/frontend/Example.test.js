import React from "react";
import { mount } from "enzyme";

import Example from "../../resources/js/components/Example";

it("Should return ok", function() {
    const wrapper = mount(<Example />);
    expect(wrapper.find("div").exists()).toBe(true);
});
