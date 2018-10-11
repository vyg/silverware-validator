/* Parsley Conditional Validator
===================================================================================================================== */

import $ from 'jquery'
import Parsley from 'parsleyjs'

// Define Conditioanl Validator:
Parsley.addValidator('conditional', {
  validateString: function (value, requirement) {
    // $fields = requirement.split(',')
    console.log(value)
    console.log(requirement)

    // Valid if
    // if (value === '') {

    // } else {

    // }
    const requirementVal = document.querySelector(`[name=${requirement}]`).value
    // console.log(requirementVal === '' && value === '')
    // console.log(requirementVal !== '' && value !== '')
    // console.log(requirementVal !== '' && value !== '')
    // console.log(requirementVal)
    // console.log(value)
    // console.log(this)

    const field = $(`[name=${requirement}]`).parsley()

    if (requirementVal === '' && value === '') {
      return true
    }

    if (requirementVal !== '' && value !== '') {
      return true
    }

    // field.reset()
    // console.log(false)

    return false

    // const condition = !(
    //   (requirementVal === '' && value === '') ||
    //   (requirementVal !== '' && value !== '')
    // )

    // console.log(condition)

    // return condition
  },
  priority: 33
})
