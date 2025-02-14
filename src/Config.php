<?php

declare(strict_types=1);

namespace MattAllan\LaravelCodeStyle;

class Config extends \PhpCsFixer\Config
{
    /**
     * @var array
     */
    const RULE_DEFINITIONS = [
        '@Laravel' => [
            '@PSR2' => true,
            'align_multiline_comment' => [
                'comment_type' => 'phpdocs_like',
            ],
            'binary_operator_spaces' => [
                'operators' => [
                    '=' => 'single_space',
                    '=>' => null,
                ],
            ],
            'blank_line_after_namespace' => true,
            'blank_line_after_opening_tag' => true,
            'blank_line_before_statement' => [
                'statements' => [
                    'return',
                ],
            ],
            'braces' => true,
            'cast_spaces' => true,
            'class_definition' => true,
            'concat_space' => true,
            'declare_equal_normalize' => true,
            'elseif' => true,
            'encoding' => true,
            'full_opening_tag' => true,
            'function_declaration' => true,
            'function_typehint_space' => true,
            'single_line_comment_style' => [
                'comment_types' => ['hash'],
            ],
            'heredoc_to_nowdoc' => true,
            'include' => true,
            'indentation_type' => true,
            'ordered_imports' => [
                'sort_algorithm' => 'length',
            ],
            'list_syntax' => [
                'syntax' => 'short',
            ],
            'lowercase_cast' => true,
            'lowercase_constants' => true,
            'lowercase_keywords' => true,
            'magic_constant_casing' => true,
            'method_argument_space' => true,
            'class_attributes_separation' => [
                'elements' => [
                    'method',
                ],
            ],
            'visibility_required' => true,
            'native_function_casing' => true,
            'no_blank_lines_after_class_opening' => true,
            'no_blank_lines_after_phpdoc' => true,
            'no_extra_blank_lines' => [
                'tokens' => [
                    'extra',
                    'throw',
                    'use',
                    'use_trait',
                ],
            ],
            'no_closing_tag' => true,
            'no_empty_phpdoc' => true,
            'no_empty_statement' => true,
            'no_leading_import_slash' => true,
            'no_leading_namespace_whitespace' => true,
            'no_multiline_whitespace_around_double_arrow' => true,
            'multiline_whitespace_before_semicolons' => true,
            'no_short_bool_cast' => true,
            'no_singleline_whitespace_before_semicolons' => true,
            'no_spaces_after_function_name' => true,
            'no_spaces_around_offset' => [
                'positions' => [
                    'inside',
                ],
            ],
            'no_spaces_inside_parenthesis' => true,
            'no_trailing_comma_in_list_call' => true,
            'no_trailing_comma_in_singleline_array' => true,
            'no_trailing_whitespace' => true,
            'no_trailing_whitespace_in_comment' => true,
            'no_unneeded_control_parentheses' => true,
            'no_unused_imports' => true,
            'no_useless_return' => true,
            'no_whitespace_before_comma_in_array' => true,
            'no_whitespace_in_blank_line' => true,
            'normalize_index_brace' => true,
            'not_operator_with_successor_space' => true,
            'object_operator_without_whitespace' => true,
            'phpdoc_indent' => true,
            'phpdoc_inline_tag' => true,
            'phpdoc_no_access' => true,
            'phpdoc_no_package' => true,
            'phpdoc_no_useless_inheritdoc' => true,
            'phpdoc_scalar' => true,
            'phpdoc_single_line_var_spacing' => true,
            'phpdoc_summary' => true,
            'phpdoc_to_comment' => true,
            'phpdoc_trim' => true,
            'phpdoc_no_alias_tag' => [
                'type' => 'var',
            ],
            'phpdoc_types' => true,
            'phpdoc_var_without_name' => true,
            'increment_style' => [
                'style' => 'post',
            ],
            'no_mixed_echo_print' => [
                'use' => 'echo',
            ],
            'array_syntax' => [
                'syntax' => 'short',
            ],
            'short_scalar_cast' => true,
            'simplified_null_return' => true,
            'single_blank_line_at_eof' => true,
            'single_blank_line_before_namespace' => true,
            'single_class_element_per_statement' => true,
            'single_import_per_statement' => true,
            'single_line_after_imports' => true,
            'single_quote' => true,
            'space_after_semicolon' => true,
            'standardize_not_equals' => true,
            'switch_case_semicolon_to_colon' => true,
            'switch_case_space' => true,
            'ternary_operator_spaces' => true,
            'trailing_comma_in_multiline_array' => true,
            'trim_array_spaces' => true,
            'unary_operator_spaces' => true,
            'line_ending' => true,
            'whitespace_after_comma_in_array' => true,
        ],
        '@Laravel:risky' => [
            'no_alias_functions' => true,
            'no_unreachable_default_argument_value' => true,
            'self_accessor' => true,
            'psr4' => true,
        ],
    ];

    public function __construct($name = 'Laravel')
    {
        parent::__construct($name);
    }

    public function setRules(array $rules)
    {
        foreach (array_keys(self::RULE_DEFINITIONS) as $key) {
            if (($rules[$key] ?? false)) {
                unset($rules[$key]);
                $rules = array_merge(self::RULE_DEFINITIONS[$key], $rules);
            }
        }

        return parent::setRules($rules);
    }
}
