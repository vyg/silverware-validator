/* Parsley Conditional Validator
===================================================================================================================== */

import Parsley from 'parsleyjs'

// Define Conditioanl Validator:
Parsley.addValidator('conditional', {
  validateString: function (value, requirement) {
    console.log('validate')
    console.log(value)
    console.log(requirement)

    return false
  },
  priority: 1
})
