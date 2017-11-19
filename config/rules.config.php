<?php

return [
    'psr4'                                  => true,
    'encoding'                              => true,
    'no_short_echo_tag'                     => true,
    'full_opening_tag'                      => true,
    'braces'                                => [
        'allow_single_line_closure' => false,
//        'position_after_functions_and_oop_constructs' => false,
    ],
    'class_definition'                      => [
        'multiLineExtendsEachSingleLine' => false,
        'singleLine'                     => true,
    ],
    'concat_space'                          => [
        'spacing' => 'one',
    ],
    'elseif'                                => true,
    'single_blank_line_at_eof'              => true,
    'dir_constant'                          => true,
    'method_argument_space'                 => true,
    'no_closing_tag'                        => true,
    'no_leading_namespace_whitespace'       => true,
    'no_whitespace_before_comma_in_array'   => true,
    'self_accessor'                         => true,
    'phpdoc_indent'                         => true,
    'blank_line_after_namespace'            => true,
    'blank_line_after_opening_tag'          => true,
    'blank_line_before_return'              => true,
    'lowercase_constants'                   => true,
    'lowercase_keywords'                    => true,
    'line_ending'                           => true,
    'no_leading_import_slash'               => true,
    'no_mixed_echo_print'                   => [
        'use' => 'echo',
    ],
    'no_short_bool_cast'                    => true,
    'no_unused_imports'                     => true,
    'ordered_imports'                       => [
        'sortAlgorithm' => 'alpha',
    ],
    'phpdoc_types'                          => true,
    'single_import_per_statement'           => true,
    'single_line_after_imports'             => true,
    'space_after_semicolon'                 => true,
    'single_quote'                          => true,
    'standardize_not_equals'                => true,
    'array_syntax'                          => [
        'syntax' => 'short',
    ],
    'binary_operator_spaces'                => [
        'align_double_arrow' => true,
        'align_equals'       => false,
    ],
    'no_trailing_whitespace_in_comment'     => true,
    'switch_case_semicolon_to_colon'        => true,
    'switch_case_space'                     => true,
    'no_trailing_comma_in_singleline_array' => true,
    'no_trailing_whitespace'                => true,
    'no_whitespace_in_blank_line'           => true,
    'visibility_required'                   => true,
    'function_typehint_space'               => true,
    'hash_to_slash_comment'                 => true,
    'include'                               => true,
    'lowercase_cast'                        => true,
    'no_unreachable_default_argument_value' => true,
    'trailing_comma_in_multiline_array'     => true,
    'native_function_casing'                => true,
    'new_with_braces'                       => true,
    'no_blank_lines_after_class_opening'    => true,
    'no_blank_lines_after_phpdoc'           => true,
    'no_empty_phpdoc'                       => true,
    'no_empty_comment'                      => true,
    'object_operator_without_whitespace'    => true,
    'phpdoc_inline_tag'                     => true,
    'phpdoc_no_access'                      => true,
    'phpdoc_no_package'                     => true,
    'general_phpdoc_annotation_remove'      => [
        '@author',
        '@access',
        '@static',
    ],
    'phpdoc_scalar'                         => true,
    'phpdoc_separation'                     => true,
    'phpdoc_single_line_var_spacing'        => true,
    'phpdoc_trim'                           => true,
    'short_scalar_cast'                     => true,
    'ternary_operator_spaces'               => true,
    'trim_array_spaces'                     => true,
    'combine_consecutive_unsets'            => true,
    'ereg_to_preg'                          => true,
    'header_comment'                        => false,
    'indentation_type'                      => true,
];
